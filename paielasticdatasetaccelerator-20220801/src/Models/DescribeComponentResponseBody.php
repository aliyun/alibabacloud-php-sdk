<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeComponentResponseBody\template;
use AlibabaCloud\Tea\Model;

class DescribeComponentResponseBody extends Model
{
    /**
     * @example 2014-10-02T15:01:23Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2014-10-02T15:01:23Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example dataset-accelerator
     *
     * @var string
     */
    public $name;

    /**
     * @example 1557702098194904
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example ---\n# Source: dataset-accelerator/templates/dataset-accelerator\napiVersion: data.datasetacc.io/v1\nkind: DataSetAccelerator\nmetadata:\n  name: dataset-accelerator\nspec:\n  frontEndAddr: 10.0.0.2\n  frontEndPort: 7001\n
     *
     * @var string
     */
    public $renderedContent;

    /**
     * @example A731A84D-55C9-44F7-99BB-E1CF0CF19197
     *
     * @var string
     */
    public $requestId;

    /**
     * @var template
     */
    public $template;

    /**
     * @example 276065346797410278
     *
     * @var string
     */
    public $userId;

    /**
     * @example cmpt-5zk866779me51jgu3w
     *
     * @var string
     */
    public $uuid;

    /**
     * @example v1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'name'            => 'Name',
        'ownerId'         => 'OwnerId',
        'renderedContent' => 'RenderedContent',
        'requestId'       => 'RequestId',
        'template'        => 'Template',
        'userId'          => 'UserId',
        'uuid'            => 'Uuid',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->renderedContent) {
            $res['RenderedContent'] = $this->renderedContent;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComponentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RenderedContent'])) {
            $model->renderedContent = $map['RenderedContent'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Template'])) {
            $model->template = template::fromMap($map['Template']);
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
