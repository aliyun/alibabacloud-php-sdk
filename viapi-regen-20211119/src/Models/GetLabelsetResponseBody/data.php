<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetLabelsetResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $labelType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subTaskPackageSize;

    /**
     * @var string
     */
    public $tagUserList;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'description'        => 'Description',
        'gmtCreate'          => 'GmtCreate',
        'id'                 => 'Id',
        'labelType'          => 'LabelType',
        'name'               => 'Name',
        'status'             => 'Status',
        'subTaskPackageSize' => 'SubTaskPackageSize',
        'tagUserList'        => 'TagUserList',
        'tags'               => 'Tags',
        'total'              => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->labelType) {
            $res['LabelType'] = $this->labelType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subTaskPackageSize) {
            $res['SubTaskPackageSize'] = $this->subTaskPackageSize;
        }
        if (null !== $this->tagUserList) {
            $res['TagUserList'] = $this->tagUserList;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LabelType'])) {
            $model->labelType = $map['LabelType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubTaskPackageSize'])) {
            $model->subTaskPackageSize = $map['SubTaskPackageSize'];
        }
        if (isset($map['TagUserList'])) {
            $model->tagUserList = $map['TagUserList'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
