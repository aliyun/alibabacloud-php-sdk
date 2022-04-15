<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CheckChatappContactsRequest extends Model
{
    /**
     * @description 通道类型
     *
     * @var string
     */
    public $channelType;

    /**
     * @description 需要查询的用户列表,单次调用最多查询10个。注意：用户号码必须加国家码
     *
     * @var string[]
     */
    public $contacts;

    /**
     * @description ISV客户wabaId
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description 发送号码,所选择ChannelType下的Business账号，即在控制台上审核通过的Number
     *
     * @var string
     */
    public $from;
    protected $_name = [
        'channelType' => 'ChannelType',
        'contacts'    => 'Contacts',
        'custWabaId'  => 'CustWabaId',
        'from'        => 'From',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = $this->contacts;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckChatappContactsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = $map['Contacts'];
            }
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        return $model;
    }
}
