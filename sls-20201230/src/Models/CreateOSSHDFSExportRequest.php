<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateOSSHDFSExportRequest extends Model
{
    /**
     * @description The configuration details of the job.
     *
     * This parameter is required.
     * @var OSSExportConfiguration
     */
    public $configuration;

    /**
     * @description The description of the job.
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the job.
     *
     * This parameter is required.
     * @example ali-test-oss-hdfs-job
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The unique identifier of the OSS data shipping job.
     *
     * This parameter is required.
     * @example job-123456789-123456
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'configuration' => 'configuration',
        'description'   => 'description',
        'displayName'   => 'displayName',
        'name'          => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOSSHDFSExportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = OSSExportConfiguration::fromMap($map['configuration']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
