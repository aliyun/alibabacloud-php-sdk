<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class PopListObjectProjectRequest extends Model
{
    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $customSource;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var bool
     */
    public $withSource;
    protected $_name = [
        'auditStatus'  => 'AuditStatus',
        'current'      => 'Current',
        'customSource' => 'CustomSource',
        'jwtToken'     => 'JwtToken',
        'size'         => 'Size',
        'sortField'    => 'SortField',
        'status'       => 'Status',
        'title'        => 'Title',
        'withSource'   => 'WithSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->customSource) {
            $res['CustomSource'] = $this->customSource;
        }
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->withSource) {
            $res['WithSource'] = $this->withSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PopListObjectProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['CustomSource'])) {
            $model->customSource = $map['CustomSource'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['WithSource'])) {
            $model->withSource = $map['WithSource'];
        }

        return $model;
    }
}
