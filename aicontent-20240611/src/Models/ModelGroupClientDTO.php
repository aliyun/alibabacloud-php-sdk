<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelGroupClientDTO extends Model
{
    /**
     * @var ModelGroupClientKeyItemDTO[]
     */
    public $apiKeys;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientName;
    protected $_name = [
        'apiKeys' => 'apiKeys',
        'clientId' => 'clientId',
        'clientName' => 'clientName',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['apiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['apiKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->clientName) {
            $res['clientName'] = $this->clientName;
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
        if (isset($map['apiKeys'])) {
            if (!empty($map['apiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['apiKeys'] as $item1) {
                    $model->apiKeys[$n1] = ModelGroupClientKeyItemDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['clientName'])) {
            $model->clientName = $map['clientName'];
        }

        return $model;
    }
}
