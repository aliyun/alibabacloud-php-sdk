<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDataQualityRuleTemplatesRequest extends Model
{
    /**
     * @description The source of the rule template. Required.
     * - System: System Template
     * - UserDefined: user-defined Template
     *
     * @example System
     *
     * @var string
     */
    public $creationSource;

    /**
     * @description The category directory where the custom template is stored, slash/divider level. Each level name can be up to 1024 characters in length and cannot contain white space characters or backslashes.
     *
     * @example /ods/order_data
     *
     * @var string
     */
    public $directoryPath;

    /**
     * @description Fuzzy matching of template rule names. If it is a system template, the internationalized name of the system template will be fuzzy matching based on the language.
     *
     * @example Table rows
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description DataWorks workspace ID.
     *
     * This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'creationSource' => 'CreationSource',
        'directoryPath' => 'DirectoryPath',
        'name' => 'Name',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationSource) {
            $res['CreationSource'] = $this->creationSource;
        }
        if (null !== $this->directoryPath) {
            $res['DirectoryPath'] = $this->directoryPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataQualityRuleTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationSource'])) {
            $model->creationSource = $map['CreationSource'];
        }
        if (isset($map['DirectoryPath'])) {
            $model->directoryPath = $map['DirectoryPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
