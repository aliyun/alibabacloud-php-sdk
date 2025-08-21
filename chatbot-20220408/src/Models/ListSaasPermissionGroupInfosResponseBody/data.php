<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasPermissionGroupInfosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasPermissionGroupInfosResponseBody\data\pgInfos;

class data extends Model
{
    /**
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
     * @var string
     */
    public $saasCode;
    protected $_name = [
        'enName' => 'EnName',
        'name' => 'Name',
        'pgInfos' => 'PgInfos',
        'saasCode' => 'SaasCode',
    ];

    public function validate()
    {
        if (\is_array($this->pgInfos)) {
            Model::validateArray($this->pgInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pgInfos) {
            if (\is_array($this->pgInfos)) {
                $res['PgInfos'] = [];
                $n1 = 0;
                foreach ($this->pgInfos as $item1) {
                    $res['PgInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->saasCode) {
            $res['SaasCode'] = $this->saasCode;
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
        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PgInfos'])) {
            if (!empty($map['PgInfos'])) {
                $model->pgInfos = [];
                $n1 = 0;
                foreach ($map['PgInfos'] as $item1) {
                    $model->pgInfos[$n1] = pgInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SaasCode'])) {
            $model->saasCode = $map['SaasCode'];
        }

        return $model;
    }
}
