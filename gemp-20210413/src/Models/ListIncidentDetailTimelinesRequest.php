<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListIncidentDetailTimelinesRequest extends Model
{
    /**
     * @example FD200FAE-E98F-496E-BFE6-4CE61E59A2E9
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $idSort;

    /**
     * @example 123
     *
     * @var int
     */
    public $incidentId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clientToken' => 'clientToken',
        'idSort'      => 'idSort',
        'incidentId'  => 'incidentId',
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->idSort) {
            $res['idSort'] = $this->idSort;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIncidentDetailTimelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['idSort'])) {
            $model->idSort = $map['idSort'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
