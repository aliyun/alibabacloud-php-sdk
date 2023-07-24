<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sasti\V20200512\Models;

use AlibabaCloud\Tea\Model;

class DescribeFileReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $basic;

    /**
     * @example 02e6b7cf0d34c6eac059f754b751208b
     *
     * @var string
     */
    public $fileHash;

    /**
     * @var string
     */
    public $intelligences;

    /**
     * @example 3F2BBCA2-4EE5-456F-93B1-DE0B69CAFD71
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ""
     *
     * @var string
     */
    public $sandbox;

    /**
     * @example 2
     *
     * @var string
     */
    public $threatLevel;

    /**
     * @var string
     */
    public $threatTypes;
    protected $_name = [
        'basic'         => 'Basic',
        'fileHash'      => 'FileHash',
        'intelligences' => 'Intelligences',
        'requestId'     => 'RequestId',
        'sandbox'       => 'Sandbox',
        'threatLevel'   => 'ThreatLevel',
        'threatTypes'   => 'ThreatTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basic) {
            $res['Basic'] = $this->basic;
        }
        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }
        if (null !== $this->intelligences) {
            $res['Intelligences'] = $this->intelligences;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sandbox) {
            $res['Sandbox'] = $this->sandbox;
        }
        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }
        if (null !== $this->threatTypes) {
            $res['ThreatTypes'] = $this->threatTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFileReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Basic'])) {
            $model->basic = $map['Basic'];
        }
        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }
        if (isset($map['Intelligences'])) {
            $model->intelligences = $map['Intelligences'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sandbox'])) {
            $model->sandbox = $map['Sandbox'];
        }
        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }
        if (isset($map['ThreatTypes'])) {
            $model->threatTypes = $map['ThreatTypes'];
        }

        return $model;
    }
}
