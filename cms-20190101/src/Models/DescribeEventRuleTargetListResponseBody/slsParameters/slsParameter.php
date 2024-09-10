<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\slsParameters;

use AlibabaCloud\Tea\Model;

class slsParameter extends Model
{
    /**
     * @description The ARN of the Log Service Logstore.
     *
     * - ResourceId: the resource ID
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the recipient.
     *
     * @example 4
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the Logstore.
     *
     * @example logstore_test
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The name of the project.
     *
     * @example project_test
     *
     * @var string
     */
    public $project;

    /**
     * @description The ID of the region where the Log Service project resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'arn'      => 'Arn',
        'id'       => 'Id',
        'logStore' => 'LogStore',
        'project'  => 'Project',
        'region'   => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
