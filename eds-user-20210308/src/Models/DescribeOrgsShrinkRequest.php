<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class DescribeOrgsShrinkRequest extends Model
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
     * @var string
     */
    public $showExtrasShrink;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orgName' => 'OrgName',
        'parentOrgId' => 'ParentOrgId',
        'showExtrasShrink' => 'ShowExtras',
    ];

    public function validate()
    {
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

        if (null !== $this->showExtrasShrink) {
            $res['ShowExtras'] = $this->showExtrasShrink;
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
            $model->showExtrasShrink = $map['ShowExtras'];
        }

        return $model;
    }
}
