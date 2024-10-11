<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeAccountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $account;

    /**
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @example cd0289a263bf4146a2e00888321178234b65e8c050142074ad05683e3749****
     *
     * @var string
     */
    public $passwordSha256Hex;

    /**
     * @var string
     */
    public $privilegeDescription;

    /**
     * @example Super
     *
     * @var string
     */
    public $privilegeType;
    protected $_name = [
        'account'              => 'Account',
        'comment'              => 'Comment',
        'passwordSha256Hex'    => 'PasswordSha256Hex',
        'privilegeDescription' => 'PrivilegeDescription',
        'privilegeType'        => 'PrivilegeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->passwordSha256Hex) {
            $res['PasswordSha256Hex'] = $this->passwordSha256Hex;
        }
        if (null !== $this->privilegeDescription) {
            $res['PrivilegeDescription'] = $this->privilegeDescription;
        }
        if (null !== $this->privilegeType) {
            $res['PrivilegeType'] = $this->privilegeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['PasswordSha256Hex'])) {
            $model->passwordSha256Hex = $map['PasswordSha256Hex'];
        }
        if (isset($map['PrivilegeDescription'])) {
            $model->privilegeDescription = $map['PrivilegeDescription'];
        }
        if (isset($map['PrivilegeType'])) {
            $model->privilegeType = $map['PrivilegeType'];
        }

        return $model;
    }
}
