<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBizSimpleListResponseBody;

use AlibabaCloud\Tea\Model;

class bizSimpleList extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $ngGroupId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $useCc;

    /**
     * @var int
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $esnBizId;

    /**
     * @var int
     */
    public $ccQps;
    protected $_name = [
        'type'      => 'Type',
        'ngGroupId' => 'NgGroupId',
        'appId'     => 'AppId',
        'useCc'     => 'UseCc',
        'bizId'     => 'BizId',
        'bizName'   => 'BizName',
        'esnBizId'  => 'EsnBizId',
        'ccQps'     => 'CcQps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->ngGroupId) {
            $res['NgGroupId'] = $this->ngGroupId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->useCc) {
            $res['UseCc'] = $this->useCc;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }
        if (null !== $this->ccQps) {
            $res['CcQps'] = $this->ccQps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizSimpleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['NgGroupId'])) {
            $model->ngGroupId = $map['NgGroupId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['UseCc'])) {
            $model->useCc = $map['UseCc'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }
        if (isset($map['CcQps'])) {
            $model->ccQps = $map['CcQps'];
        }

        return $model;
    }
}
