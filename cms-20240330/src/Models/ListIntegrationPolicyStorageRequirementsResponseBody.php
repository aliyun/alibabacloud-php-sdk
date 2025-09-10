<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyStorageRequirementsResponseBody\storageRequirements;

class ListIntegrationPolicyStorageRequirementsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var storageRequirements[]
     */
    public $storageRequirements;
    protected $_name = [
        'requestId' => 'requestId',
        'storageRequirements' => 'storageRequirements',
    ];

    public function validate()
    {
        if (\is_array($this->storageRequirements)) {
            Model::validateArray($this->storageRequirements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->storageRequirements) {
            if (\is_array($this->storageRequirements)) {
                $res['storageRequirements'] = [];
                $n1 = 0;
                foreach ($this->storageRequirements as $item1) {
                    $res['storageRequirements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['storageRequirements'])) {
            if (!empty($map['storageRequirements'])) {
                $model->storageRequirements = [];
                $n1 = 0;
                foreach ($map['storageRequirements'] as $item1) {
                    $model->storageRequirements[$n1] = storageRequirements::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
