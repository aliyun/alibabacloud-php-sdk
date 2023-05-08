<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The CVE ID of the vulnerability.
     *
     * @example CVE-2022-42836
     *
     * @var string
     */
    public $cveId;

    /**
     * @description The extended field for Server Guard.
     *
     * @example {\"relatedType\":[{\"type\":\"sys\"}]}
     *
     * @var string
     */
    public $extAegis;

    /**
     * @description The primary key ID of the database.
     *
     * @example 40586
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the vulnerability was detected based on version comparison. Valid values:
     *
     *   1: The vulnerability was detected based on version comparison.
     *   0: The vulnerability was not detected based on version comparison.
     *
     * @example 1
     *
     * @var int
     */
    public $isAegis;

    /**
     * @description Indicates whether the vulnerability was detected based on proof of concept (POC) verification. Valid values:
     *
     *   1: The vulnerability was detected based on POC verification.
     *   0: The vulnerability was not detected based on POC verification.
     *
     * @example 0
     *
     * @var int
     */
    public $isSas;

    /**
     * @description The ID of the vulnerability.
     *
     * @example AVD-2018-8218
     *
     * @var string
     */
    public $otherId;

    /**
     * @description The time when the vulnerability was disclosed.
     *
     * @example 2022-12-13T08:00Z
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @description The name of the vulnerability.
     *
     * @example Windows RCE vulnerability
     *
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
