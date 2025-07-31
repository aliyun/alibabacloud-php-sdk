<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUdfByVersionResponseBody;

use AlibabaCloud\Tea\Model;

class udfInfo extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $category;

    /**
     * @example com.lydaas.dataphin.UdfTest
     *
     * @var string
     */
    public $className;

    /**
     * @example udf_to_lower(char x)
     *
     * @var string
     */
    public $commandHelp;

    /**
     * @example HADOOP
     *
     * @var string
     */
    public $computeEngineType;

    /**
     * @example 30012110
     *
     * @var string
     */
    public $creator;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example /
     *
     * @var string
     */
    public $directory;

    /**
     * @example 2025-06-10 10:01:01
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-06-10 10:01:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1030111021
     *
     * @var int
     */
    public $id;

    /**
     * @example 30012110
     *
     * @var string
     */
    public $lastModifier;

    /**
     * @example udf_to_lower
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'category' => 'Category',
        'className' => 'ClassName',
        'commandHelp' => 'CommandHelp',
        'computeEngineType' => 'ComputeEngineType',
        'creator' => 'Creator',
        'description' => 'Description',
        'directory' => 'Directory',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->commandHelp) {
            $res['CommandHelp'] = $this->commandHelp;
        }
        if (null !== $this->computeEngineType) {
            $res['ComputeEngineType'] = $this->computeEngineType;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return udfInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['CommandHelp'])) {
            $model->commandHelp = $map['CommandHelp'];
        }
        if (isset($map['ComputeEngineType'])) {
            $model->computeEngineType = $map['ComputeEngineType'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
