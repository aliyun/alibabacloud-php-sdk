<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class QueryDomainGroupListRequest extends Model
{
    /**
     * @var string
     */
    public $domainGroupName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $showDeletingGroup;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainGroupName' => 'DomainGroupName',
        'lang' => 'Lang',
        'showDeletingGroup' => 'ShowDeletingGroup',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
