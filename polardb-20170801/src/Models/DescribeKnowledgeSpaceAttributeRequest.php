<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeKnowledgeSpaceAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $knowledgeSpaceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'knowledgeSpaceId' => 'KnowledgeSpaceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeSpaceId) {
            $res['KnowledgeSpaceId'] = $this->knowledgeSpaceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['KnowledgeSpaceId'])) {
            $model->knowledgeSpaceId = $map['KnowledgeSpaceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
