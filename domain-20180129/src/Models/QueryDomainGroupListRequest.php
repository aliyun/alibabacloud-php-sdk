<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryDomainGroupListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $domainGroupName;

    /**
     * @var bool
     */
    public $showDeletingGroup;
    protected $_name = [
        'lang'              => 'Lang',
        'userClientIp'      => 'UserClientIp',
        'domainGroupName'   => 'DomainGroupName',
        'showDeletingGroup' => 'ShowDeletingGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->domainGroupName) {
            $res['DomainGroupName'] = $this->domainGroupName;
        }
        if (null !== $this->showDeletingGroup) {
            $res['ShowDeletingGroup'] = $this->showDeletingGroup;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['DomainGroupName'])) {
            $model->domainGroupName = $map['DomainGroupName'];
        }
        if (isset($map['ShowDeletingGroup'])) {
            $model->showDeletingGroup = $map['ShowDeletingGroup'];
        }

        return $model;
    }
}
