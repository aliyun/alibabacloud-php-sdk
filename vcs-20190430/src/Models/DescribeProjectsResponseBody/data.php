<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430\Models\DescribeProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $gbIp;

    /**
     * @var string
     */
    public $gbPort;

    /**
     * @var float
     */
    public $imageSize;

    /**
     * @var string
     */
    public $packagePattern;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $status;

    /**
     * @var float
     */
    public $structuredSize;

    /**
     * @var float
     */
    public $vectorSize;
    protected $_name = [
        'algorithmName'  => 'AlgorithmName',
        'gbId'           => 'GbId',
        'gbIp'           => 'GbIp',
        'gbPort'         => 'GbPort',
        'imageSize'      => 'ImageSize',
        'packagePattern' => 'PackagePattern',
        'projectCode'    => 'ProjectCode',
        'projectId'      => 'ProjectId',
        'projectName'    => 'ProjectName',
        'protocol'       => 'Protocol',
        'status'         => 'Status',
        'structuredSize' => 'StructuredSize',
        'vectorSize'     => 'VectorSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->gbIp) {
            $res['GbIp'] = $this->gbIp;
        }
        if (null !== $this->gbPort) {
            $res['GbPort'] = $this->gbPort;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->packagePattern) {
            $res['PackagePattern'] = $this->packagePattern;
        }
        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->structuredSize) {
            $res['StructuredSize'] = $this->structuredSize;
        }
        if (null !== $this->vectorSize) {
            $res['VectorSize'] = $this->vectorSize;
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
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['GbIp'])) {
            $model->gbIp = $map['GbIp'];
        }
        if (isset($map['GbPort'])) {
            $model->gbPort = $map['GbPort'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['PackagePattern'])) {
            $model->packagePattern = $map['PackagePattern'];
        }
        if (isset($map['ProjectCode'])) {
            $model->projectCode = $map['ProjectCode'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StructuredSize'])) {
            $model->structuredSize = $map['StructuredSize'];
        }
        if (isset($map['VectorSize'])) {
            $model->vectorSize = $map['VectorSize'];
        }

        return $model;
    }
}
