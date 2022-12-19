<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody;

use AlibabaCloud\Tea\Model;

class description extends Model
{
    /**
     * @description The link to the description of the check item.
     *
     * @example https://www.alibabacloud.com/help/en/object-storage-service/latest/tutorial-implement-data-sharing-across-departments-based-on-bucket-policies
     *
     * @var string
     */
    public $link;

    /**
     * @description The type of the description of the check item. The value is fixed as text.
     *
     * @example text
     *
     * @var string
     */
    public $type;

    /**
     * @description The content in the description of the check item.
     *
     * @example The MSE instance does not enable authentication by default. If public network access is enabled at the same time, the data in the configuration center may be dragged and there is a security risk.
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'link'  => 'Link',
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return description
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
