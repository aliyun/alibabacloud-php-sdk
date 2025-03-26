<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyAclEntriesRequest extends Model
{
    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'policy' => 'Policy',
        'regionId' => 'RegionId',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->sourceId)) {
            Model::validateArray($this->sourceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceId) {
            if (\is_array($this->sourceId)) {
                $res['SourceId'] = [];
                $n1 = 0;
                foreach ($this->sourceId as $item1) {
                    $res['SourceId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceId'])) {
            if (!empty($map['SourceId'])) {
                $model->sourceId = [];
                $n1 = 0;
                foreach ($map['SourceId'] as $item1) {
                    $model->sourceId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
