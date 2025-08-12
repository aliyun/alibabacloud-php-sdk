<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeOrgsRequest extends Model
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
    public $orgName;

    /**
     * @var string
     */
    public $parentOrgId;

    /**
     * @var mixed[]
     */
    public $showExtras;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orgName' => 'OrgName',
        'parentOrgId' => 'ParentOrgId',
        'showExtras' => 'ShowExtras',
    ];

    public function validate()
    {
        if (\is_array($this->showExtras)) {
            Model::validateArray($this->showExtras);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        if (null !== $this->parentOrgId) {
            $res['ParentOrgId'] = $this->parentOrgId;
        }

        if (null !== $this->showExtras) {
            if (\is_array($this->showExtras)) {
                $res['ShowExtras'] = [];
                foreach ($this->showExtras as $key1 => $value1) {
                    $res['ShowExtras'][$key1] = $value1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        if (isset($map['ParentOrgId'])) {
            $model->parentOrgId = $map['ParentOrgId'];
        }

        if (isset($map['ShowExtras'])) {
            if (!empty($map['ShowExtras'])) {
                $model->showExtras = [];
                foreach ($map['ShowExtras'] as $key1 => $value1) {
                    $model->showExtras[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
