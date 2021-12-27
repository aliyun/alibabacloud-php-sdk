<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description cveId
     *
     * @var string
     */
    public $cveId;

    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description 是否安骑士扫描
     *
     * @var int
     */
    public $isAegis;

    /**
     * @description 是否网络扫描
     *
     * @var int
     */
    public $isSas;

    /**
     * @description 编号
     *
     * @var string
     */
    public $otherId;

    /**
     * @description 发布时间
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @description 漏洞标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'cveId'       => 'CveId',
        'id'          => 'Id',
        'isAegis'     => 'IsAegis',
        'isSas'       => 'IsSas',
        'otherId'     => 'OtherId',
        'releaseTime' => 'ReleaseTime',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isAegis) {
            $res['IsAegis'] = $this->isAegis;
        }
        if (null !== $this->isSas) {
            $res['IsSas'] = $this->isSas;
        }
        if (null !== $this->otherId) {
            $res['OtherId'] = $this->otherId;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsAegis'])) {
            $model->isAegis = $map['IsAegis'];
        }
        if (isset($map['IsSas'])) {
            $model->isSas = $map['IsSas'];
        }
        if (isset($map['OtherId'])) {
            $model->otherId = $map['OtherId'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
