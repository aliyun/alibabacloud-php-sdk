<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateOSSExportRequest extends Model
{
    /**
     * @description The configuration details of the job.
     *
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
     * @example ali-test-oss-job
     *
     * @var string
     */
    public $displayName;
    protected $_name = [
        'configuration' => 'configuration',
        'description'   => 'description',
        'displayName'   => 'displayName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOSSExportRequest
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

        return $model;
    }
}
