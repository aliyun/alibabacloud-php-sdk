<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniAppsResponseBody\listMiniResult;

use AlibabaCloud\Dara\Model;

class miniProgramList extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $h5Id;

    /**
     * @var string
     */
    public $h5Name;
    protected $_name = [
        'appCode' => 'AppCode',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'h5Id' => 'H5Id',
        'h5Name' => 'H5Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->h5Id) {
            $res['H5Id'] = $this->h5Id;
        }

        if (null !== $this->h5Name) {
            $res['H5Name'] = $this->h5Name;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['H5Id'])) {
            $model->h5Id = $map['H5Id'];
        }

        if (isset($map['H5Name'])) {
            $model->h5Name = $map['H5Name'];
        }

        return $model;
    }
}
