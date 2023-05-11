<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleByProductResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The alias of the OTA module.
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The description of the OTA module.
     *
     * @var string
     */
    public $desc;

    /**
     * @description The time when the OTA module was created. The time is displayed in UTC.
     *
     * @example 2020-10-13T09:46Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The last time when the OTA module was updated. The time is displayed in UTC.
     *
     * @example 2020-10-19T09:46Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The name of the OTA module.
     *
     * @example barcodeScanner
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The ProductKey of the product.
     *
     * @example aluctKe****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'aliasName'   => 'AliasName',
        'desc'        => 'Desc',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'moduleName'  => 'ModuleName',
        'productKey'  => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
