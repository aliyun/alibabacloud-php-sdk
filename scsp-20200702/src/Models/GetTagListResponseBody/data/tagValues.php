<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\GetTagListResponseBody\data;

use AlibabaCloud\Tea\Model;

class tagValues extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagGroupCode;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagGroupName;

    /**
     * @var string
     */
    public $entityRelationNumber;
    protected $_name = [
        'status'               => 'Status',
        'description'          => 'Description',
        'tagName'              => 'TagName',
        'tagGroupCode'         => 'TagGroupCode',
        'tagCode'              => 'TagCode',
        'tagGroupName'         => 'TagGroupName',
        'entityRelationNumber' => 'EntityRelationNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagGroupCode) {
            $res['TagGroupCode'] = $this->tagGroupCode;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->tagGroupName) {
            $res['TagGroupName'] = $this->tagGroupName;
        }
        if (null !== $this->entityRelationNumber) {
            $res['EntityRelationNumber'] = $this->entityRelationNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagGroupCode'])) {
            $model->tagGroupCode = $map['TagGroupCode'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagGroupName'])) {
            $model->tagGroupName = $map['TagGroupName'];
        }
        if (isset($map['EntityRelationNumber'])) {
            $model->entityRelationNumber = $map['EntityRelationNumber'];
        }

        return $model;
    }
}
