<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryDomainGroupListRequest extends Model
{
    /**
     * @var string
     */
    public $domainGroupName;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example false
     *
     * @var bool
     */
    public $showDeletingGroup;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainGroupName'   => 'DomainGroupName',
        'lang'              => 'Lang',
        'showDeletingGroup' => 'ShowDeletingGroup',
        'userClientIp'      => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainGroupName) {
            $res['DomainGroupName'] = $this->domainGroupName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->showDeletingGroup) {
            $res['ShowDeletingGroup'] = $this->showDeletingGroup;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainGroupListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainGroupName'])) {
            $model->domainGroupName = $map['DomainGroupName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ShowDeletingGroup'])) {
            $model->showDeletingGroup = $map['ShowDeletingGroup'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
