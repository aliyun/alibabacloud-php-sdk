<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListPermissionsRequest extends Model
{
    /**
     * @example database_name
     *
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $function;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example ""
     *
     * @var string
     */
    public $pageToken;

    /**
     * @example acs:ram::[accountId]:user/user_name
     *
     * @var string
     */
    public $principal;

    /**
     * @description This parameter is required.
     *
     * @example CATALOG
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example table_name
     *
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $view;
    protected $_name = [
        'database' => 'database',
        'function' => 'function',
        'maxResults' => 'maxResults',
        'pageToken' => 'pageToken',
        'principal' => 'principal',
        'resourceType' => 'resourceType',
        'table' => 'table',
        'view' => 'view',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }
        if (null !== $this->function) {
            $res['function'] = $this->function;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->pageToken) {
            $res['pageToken'] = $this->pageToken;
        }
        if (null !== $this->principal) {
            $res['principal'] = $this->principal;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->table) {
            $res['table'] = $this->table;
        }
        if (null !== $this->view) {
            $res['view'] = $this->view;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }
        if (isset($map['function'])) {
            $model->function = $map['function'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['pageToken'])) {
            $model->pageToken = $map['pageToken'];
        }
        if (isset($map['principal'])) {
            $model->principal = $map['principal'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['table'])) {
            $model->table = $map['table'];
        }
        if (isset($map['view'])) {
            $model->view = $map['view'];
        }

        return $model;
    }
}
