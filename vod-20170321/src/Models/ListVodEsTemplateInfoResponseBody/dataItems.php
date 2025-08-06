<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListVodEsTemplateInfoResponseBody;

use AlibabaCloud\Dara\Model;

class dataItems extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $tmplDef;

    /**
     * @var string
     */
    public $tmplDesc;

    /**
     * @var string
     */
    public $tmplName;
    protected $_name = [
        'id' => 'Id',
        'tmplDef' => 'TmplDef',
        'tmplDesc' => 'TmplDesc',
        'tmplName' => 'TmplName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->tmplDef) {
            $res['TmplDef'] = $this->tmplDef;
        }

        if (null !== $this->tmplDesc) {
            $res['TmplDesc'] = $this->tmplDesc;
        }

        if (null !== $this->tmplName) {
            $res['TmplName'] = $this->tmplName;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['TmplDef'])) {
            $model->tmplDef = $map['TmplDef'];
        }

        if (isset($map['TmplDesc'])) {
            $model->tmplDesc = $map['TmplDesc'];
        }

        if (isset($map['TmplName'])) {
            $model->tmplName = $map['TmplName'];
        }

        return $model;
    }
}
