<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetDownloadJobResponseBody\configuration;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetDownloadJobResponseBody\executionDetails;

class GetDownloadJobResponseBody extends Model
{
    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var executionDetails
     */
    public $executionDetails;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'configuration' => 'configuration',
        'createTime' => 'createTime',
        'description' => 'description',
        'displayName' => 'displayName',
        'executionDetails' => 'executionDetails',
        'name' => 'name',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->configuration) {
            $this->configuration->validate();
        }
        if (null !== $this->executionDetails) {
            $this->executionDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toArray($noStream) : $this->configuration;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->executionDetails) {
            $res['executionDetails'] = null !== $this->executionDetails ? $this->executionDetails->toArray($noStream) : $this->executionDetails;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = configuration::fromMap($map['configuration']);
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['executionDetails'])) {
            $model->executionDetails = executionDetails::fromMap($map['executionDetails']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
