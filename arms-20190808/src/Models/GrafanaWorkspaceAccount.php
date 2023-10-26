<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceAccount extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountNotes;

    /**
     * @example 131243781293
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @example test
     *
     * @var string
     */
    public $aliyunUserName;

    /**
     * @example 创建时间
     *
     * @var float
     */
    public $gmtCreate;

    /**
     * @var GrafanaWorkspaceUserOrg[]
     */
    public $orgs;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accountId'      => 'accountId',
        'accountNotes'   => 'accountNotes',
        'aliyunUid'      => 'aliyunUid',
        'aliyunUserName' => 'aliyunUserName',
        'gmtCreate'      => 'gmtCreate',
        'orgs'           => 'orgs',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->accountNotes) {
            $res['accountNotes'] = $this->accountNotes;
        }
        if (null !== $this->aliyunUid) {
            $res['aliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->aliyunUserName) {
            $res['aliyunUserName'] = $this->aliyunUserName;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->orgs) {
            $res['orgs'] = [];
            if (null !== $this->orgs && \is_array($this->orgs)) {
                $n = 0;
                foreach ($this->orgs as $item) {
                    $res['orgs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['accountNotes'])) {
            $model->accountNotes = $map['accountNotes'];
        }
        if (isset($map['aliyunUid'])) {
            $model->aliyunUid = $map['aliyunUid'];
        }
        if (isset($map['aliyunUserName'])) {
            $model->aliyunUserName = $map['aliyunUserName'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['orgs'])) {
            if (!empty($map['orgs'])) {
                $model->orgs = [];
                $n           = 0;
                foreach ($map['orgs'] as $item) {
                    $model->orgs[$n++] = null !== $item ? GrafanaWorkspaceUserOrg::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
