<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetObjectScanEventResponseBody\data;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The type of the item.
     *
     * @example html
     *
     * @var string
     */
    public $infoType;

    /**
     * @description The name of the item.
     *
     * @example DownloadUrl
     *
     * @var string
     */
    public $name;

    /**
     * @description The display name of the item.
     *
     * @example DownloadUrl
     *
     * @var string
     */
    public $nameDisplay;

    /**
     * @description The type of the item.
     *
     * @example html
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the item.
     *
     * @example http://****
     *
     * @var string
     */
    public $value;

    /**
     * @description The display value of the item.
     *
     * @example http://****
     *
     * @var string
     */
    public $valueDisplay;
    protected $_name = [
        'infoType'     => 'InfoType',
        'name'         => 'Name',
        'nameDisplay'  => 'NameDisplay',
        'type'         => 'Type',
        'value'        => 'Value',
        'valueDisplay' => 'ValueDisplay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infoType) {
            $res['InfoType'] = $this->infoType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameDisplay) {
            $res['NameDisplay'] = $this->nameDisplay;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueDisplay) {
            $res['ValueDisplay'] = $this->valueDisplay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InfoType'])) {
            $model->infoType = $map['InfoType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameDisplay'])) {
            $model->nameDisplay = $map['NameDisplay'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueDisplay'])) {
            $model->valueDisplay = $map['ValueDisplay'];
        }

        return $model;
    }
}
