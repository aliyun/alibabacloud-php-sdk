<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceAccount extends Model
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $accountNotes;
    /**
     * @var string
     */
    public $aliyunUid;
    /**
     * @var string
     */
    public $aliyunUserName;
    /**
     * @var float
     */
    public $gmtCreate;
    /**
     * @var GrafanaWorkspaceUserOrg[]
     */
    public $orgs;
    /**
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
        if (\is_array($this->orgs)) {
            Model::validateArray($this->orgs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->orgs)) {
                $res['orgs'] = [];
                $n1          = 0;
                foreach ($this->orgs as $item1) {
                    $res['orgs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
                $n1          = 0;
                foreach ($map['orgs'] as $item1) {
                    $model->orgs[$n1++] = GrafanaWorkspaceUserOrg::fromMap($item1);
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
