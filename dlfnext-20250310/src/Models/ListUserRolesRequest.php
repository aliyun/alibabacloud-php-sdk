<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListUserRolesRequest extends Model
{
    /**
     * @example 10
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
    public $userPrincipal;
    protected $_name = [
        'maxResults' => 'maxResults',
        'pageToken' => 'pageToken',
        'userPrincipal' => 'userPrincipal',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->pageToken) {
            $res['pageToken'] = $this->pageToken;
        }
        if (null !== $this->userPrincipal) {
            $res['userPrincipal'] = $this->userPrincipal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserRolesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['pageToken'])) {
            $model->pageToken = $map['pageToken'];
        }
        if (isset($map['userPrincipal'])) {
            $model->userPrincipal = $map['userPrincipal'];
        }

        return $model;
    }
}
