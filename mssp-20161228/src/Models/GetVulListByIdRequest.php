<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class GetVulListByIdRequest extends Model
{
    /**
     * @description Current page
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Whether it has been processed; y: processed; n: not processed
     *
     * @example n
     *
     * @var string
     */
    public $dealed;

    /**
     * @description Primary key ID
     *
     * This parameter is required.
     * @example 4209205
     *
     * @var int
     */
    public $id;

    /**
     * @description Risk level
     *
     * @example asap,later,nntf
     *
     * @var string
     */
    public $necessity;

    /**
     * @description Page size
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Asset information of the vulnerability to be queried, which can be set as asset name, public IP, or private IP.
     *
     * @example production_nat_cn-hangzhou_zone_105
     *
     * @var string
     */
    public $remark;

    /**
     * @description UUID of the server with the vulnerability to be queried. Multiple UUIDs should be separated by a comma (,).
     *
     * @example 3615b908-995a-4edb-bc85-1981b4e94ba0,9c52cf9a-d8ba-4e31-ae06-500b879ee4e6,4b7de3cf-c4ac-42fc-8804-35070493dc29,f3c01525-0777-4c97-88d9-bec11afd4a6a,a80bd516-c4f3-4c27-a169-c8abfaf9e89e
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'dealed'      => 'Dealed',
        'id'          => 'Id',
        'necessity'   => 'Necessity',
        'pageSize'    => 'PageSize',
        'remark'      => 'Remark',
        'uuids'       => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVulListByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
