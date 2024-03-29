<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo\softwareInfo\softwares;

use AlibabaCloud\Tea\Model;

class software extends Model
{
    /**
     * @example HDFS
     *
     * @var string
     */
    public $displayName;

    /**
     * @example HDFS
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $onlyDisplay;

    /**
     * @example 1
     *
     * @var int
     */
    public $startTpe;

    /**
     * @example 2.8.5
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'displayName' => 'DisplayName',
        'name'        => 'Name',
        'onlyDisplay' => 'OnlyDisplay',
        'startTpe'    => 'StartTpe',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->onlyDisplay) {
            $res['OnlyDisplay'] = $this->onlyDisplay;
        }
        if (null !== $this->startTpe) {
            $res['StartTpe'] = $this->startTpe;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return software
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OnlyDisplay'])) {
            $model->onlyDisplay = $map['OnlyDisplay'];
        }
        if (isset($map['StartTpe'])) {
            $model->startTpe = $map['StartTpe'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
