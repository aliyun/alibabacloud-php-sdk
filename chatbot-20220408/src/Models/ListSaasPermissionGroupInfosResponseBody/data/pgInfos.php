<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasPermissionGroupInfosResponseBody\data;

use AlibabaCloud\Dara\Model;

class pgInfos extends Model
{
    /**
     * @var string
     */
    public $pgCode;

    /**
     * @var string
     */
    public $pgEnName;

    /**
     * @var string
     */
    public $pgName;
    protected $_name = [
        'pgCode' => 'PgCode',
        'pgEnName' => 'PgEnName',
        'pgName' => 'PgName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pgCode) {
            $res['PgCode'] = $this->pgCode;
        }

        if (null !== $this->pgEnName) {
            $res['PgEnName'] = $this->pgEnName;
        }

        if (null !== $this->pgName) {
            $res['PgName'] = $this->pgName;
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
        if (isset($map['PgCode'])) {
            $model->pgCode = $map['PgCode'];
        }

        if (isset($map['PgEnName'])) {
            $model->pgEnName = $map['PgEnName'];
        }

        if (isset($map['PgName'])) {
            $model->pgName = $map['PgName'];
        }

        return $model;
    }
}
