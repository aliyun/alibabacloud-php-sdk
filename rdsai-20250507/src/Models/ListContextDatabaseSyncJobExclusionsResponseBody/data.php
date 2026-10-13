<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncJobExclusionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $documentIds;
    protected $_name = [
        'documentIds' => 'DocumentIds',
    ];

    public function validate()
    {
        if (\is_array($this->documentIds)) {
            Model::validateArray($this->documentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentIds) {
            if (\is_array($this->documentIds)) {
                $res['DocumentIds'] = [];
                $n1 = 0;
                foreach ($this->documentIds as $item1) {
                    $res['DocumentIds'][$n1] = $item1;
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
        if (isset($map['DocumentIds'])) {
            if (!empty($map['DocumentIds'])) {
                $model->documentIds = [];
                $n1 = 0;
                foreach ($map['DocumentIds'] as $item1) {
                    $model->documentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
