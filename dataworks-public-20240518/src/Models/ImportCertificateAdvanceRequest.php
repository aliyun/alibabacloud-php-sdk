<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ImportCertificateAdvanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example -
     *
     * @var Stream
     */
    public $certificateFileObject;

    /**
     * @example This is a file
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example ca1.crt
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 106560
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'certificateFileObject' => 'CertificateFile',
        'description' => 'Description',
        'name' => 'Name',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateFileObject) {
            $res['CertificateFile'] = $this->certificateFileObject;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportCertificateAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateFile'])) {
            $model->certificateFileObject = $map['CertificateFile'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
