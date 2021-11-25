<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class ListFaceGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $externalId;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $remarksAQuery;

    /**
     * @var string
     */
    public $remarksArrayAQuery;

    /**
     * @var string
     */
    public $remarksArrayBQuery;

    /**
     * @var string
     */
    public $remarksBQuery;

    /**
     * @var string
     */
    public $remarksCQuery;

    /**
     * @var string
     */
    public $remarksDQuery;

    /**
     * @var string
     */
    public $setId;
    protected $_name = [
        'externalId'         => 'ExternalId',
        'limit'              => 'Limit',
        'marker'             => 'Marker',
        'order'              => 'Order',
        'orderBy'            => 'OrderBy',
        'project'            => 'Project',
        'remarksAQuery'      => 'RemarksAQuery',
        'remarksArrayAQuery' => 'RemarksArrayAQuery',
        'remarksArrayBQuery' => 'RemarksArrayBQuery',
        'remarksBQuery'      => 'RemarksBQuery',
        'remarksCQuery'      => 'RemarksCQuery',
        'remarksDQuery'      => 'RemarksDQuery',
        'setId'              => 'SetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->remarksAQuery) {
            $res['RemarksAQuery'] = $this->remarksAQuery;
        }
        if (null !== $this->remarksArrayAQuery) {
            $res['RemarksArrayAQuery'] = $this->remarksArrayAQuery;
        }
        if (null !== $this->remarksArrayBQuery) {
            $res['RemarksArrayBQuery'] = $this->remarksArrayBQuery;
        }
        if (null !== $this->remarksBQuery) {
            $res['RemarksBQuery'] = $this->remarksBQuery;
        }
        if (null !== $this->remarksCQuery) {
            $res['RemarksCQuery'] = $this->remarksCQuery;
        }
        if (null !== $this->remarksDQuery) {
            $res['RemarksDQuery'] = $this->remarksDQuery;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFaceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RemarksAQuery'])) {
            $model->remarksAQuery = $map['RemarksAQuery'];
        }
        if (isset($map['RemarksArrayAQuery'])) {
            $model->remarksArrayAQuery = $map['RemarksArrayAQuery'];
        }
        if (isset($map['RemarksArrayBQuery'])) {
            $model->remarksArrayBQuery = $map['RemarksArrayBQuery'];
        }
        if (isset($map['RemarksBQuery'])) {
            $model->remarksBQuery = $map['RemarksBQuery'];
        }
        if (isset($map['RemarksCQuery'])) {
            $model->remarksCQuery = $map['RemarksCQuery'];
        }
        if (isset($map['RemarksDQuery'])) {
            $model->remarksDQuery = $map['RemarksDQuery'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }

        return $model;
    }
}
