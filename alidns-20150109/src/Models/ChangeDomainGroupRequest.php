<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ChangeDomainGroupRequest extends Model
{
    /**
     * @description The domain name.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the target domain name group.
     *
     *   If you do not specify GroupId, the domain name belongs to the default group.
     *   If you specify an empty string "" for GroupId, the domain name belongs to the default group.
     *   If you set GroupId to defaultGroup, the domain name belongs to the default group.
     *   If you specify GroupId to another value and the value is verified existent, the value of GroupId for the target domain name is updated. If the value is verified inexistent, the value of GroupId for the target domain name is not updated.
     *
     * @example 2223
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'domainName' => 'DomainName',
        'groupId'    => 'GroupId',
        'lang'       => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeDomainGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
