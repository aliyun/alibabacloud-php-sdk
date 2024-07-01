<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForDeletingDSRecordRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $domainName;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $keyTag;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName'   => 'DomainName',
        'keyTag'       => 'KeyTag',
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
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
        if (null !== $this->keyTag) {
            $res['KeyTag'] = $this->keyTag;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveSingleTaskForDeletingDSRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['KeyTag'])) {
            $model->keyTag = $map['KeyTag'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
