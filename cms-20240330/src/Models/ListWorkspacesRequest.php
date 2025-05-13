<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListWorkspacesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $workspaceName;

    /**
     * @var string[]
     */
    public $workspaceNameList;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'region' => 'region',
        'workspaceName' => 'workspaceName',
        'workspaceNameList' => 'workspaceNameList',
    ];

    public function validate()
    {
        if (\is_array($this->workspaceNameList)) {
            Model::validateArray($this->workspaceNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->workspaceName) {
            $res['workspaceName'] = $this->workspaceName;
        }

        if (null !== $this->workspaceNameList) {
            if (\is_array($this->workspaceNameList)) {
                $res['workspaceNameList'] = [];
                $n1 = 0;
                foreach ($this->workspaceNameList as $item1) {
                    $res['workspaceNameList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }

        if (isset($map['workspaceNameList'])) {
            if (!empty($map['workspaceNameList'])) {
                $model->workspaceNameList = [];
                $n1 = 0;
                foreach ($map['workspaceNameList'] as $item1) {
                    $model->workspaceNameList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
