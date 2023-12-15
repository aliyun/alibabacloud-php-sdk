<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20210609\Models\GetPartnerByUidResponseBody;

use AlibabaCloud\SDK\Agency\V20210609\Models\GetPartnerByUidResponseBody\data\agreementPropertyRoleDTOList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var agreementPropertyRoleDTOList[]
     */
    public $agreementPropertyRoleDTOList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'agreementPropertyRoleDTOList' => 'AgreementPropertyRoleDTOList',
        'name'                         => 'Name',
        'pid'                          => 'Pid',
        'uid'                          => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementPropertyRoleDTOList) {
            $res['AgreementPropertyRoleDTOList'] = [];
            if (null !== $this->agreementPropertyRoleDTOList && \is_array($this->agreementPropertyRoleDTOList)) {
                $n = 0;
                foreach ($this->agreementPropertyRoleDTOList as $item) {
                    $res['AgreementPropertyRoleDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['AgreementPropertyRoleDTOList'])) {
            if (!empty($map['AgreementPropertyRoleDTOList'])) {
                $model->agreementPropertyRoleDTOList = [];
                $n                                   = 0;
                foreach ($map['AgreementPropertyRoleDTOList'] as $item) {
                    $model->agreementPropertyRoleDTOList[$n++] = null !== $item ? agreementPropertyRoleDTOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
