<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasPermissionGroupInfosResponseBody;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasPermissionGroupInfosResponseBody\data\pgInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Release Center
     *
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var pgInfos[]
     */
    public $pgInfos;

    /**
     * @example FAQ
     *
     * @var string
     */
    public $saasCode;
    protected $_name = [
        'enName'   => 'EnName',
        'name'     => 'Name',
        'pgInfos'  => 'PgInfos',
        'saasCode' => 'SaasCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pgInfos) {
            $res['PgInfos'] = [];
            if (null !== $this->pgInfos && \is_array($this->pgInfos)) {
                $n = 0;
                foreach ($this->pgInfos as $item) {
                    $res['PgInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->saasCode) {
            $res['SaasCode'] = $this->saasCode;
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
        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PgInfos'])) {
            if (!empty($map['PgInfos'])) {
                $model->pgInfos = [];
                $n              = 0;
                foreach ($map['PgInfos'] as $item) {
                    $model->pgInfos[$n++] = null !== $item ? pgInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SaasCode'])) {
            $model->saasCode = $map['SaasCode'];
        }

        return $model;
    }
}
