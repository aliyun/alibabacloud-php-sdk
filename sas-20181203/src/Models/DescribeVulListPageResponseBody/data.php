<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string
     */
    public $extAegis;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isAegis;

    /**
     * @var int
     */
    public $isSas;

    /**
     * @var string
     */
    public $otherId;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'cveId'       => 'CveId',
        'extAegis'    => 'ExtAegis',
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
        if (null !== $this->extAegis) {
            $res['ExtAegis'] = $this->extAegis;
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
        if (isset($map['ExtAegis'])) {
            $model->extAegis = $map['ExtAegis'];
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
