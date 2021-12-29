<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\ListDcdnEsTemplateInfoResponseBody\dataItems;

use AlibabaCloud\Tea\Model;

class dataItem extends Model
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
        'id'       => 'Id',
        'tmplDef'  => 'TmplDef',
        'tmplDesc' => 'TmplDesc',
        'tmplName' => 'TmplName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dataItem
     */
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
