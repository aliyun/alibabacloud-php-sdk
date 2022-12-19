<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody;

use AlibabaCloud\Tea\Model;

class assistInfo extends Model
{
    /**
     * @description The link to the help information about the risk item when the Type parameter is set to link.
     *
     * @example https://www.alibabacloud.com/help/en/resource-access-management/latest/faq-about-ram-users
     *
     * @var string
     */
    public $link;

    /**
     * @description The type of the help information about the risk item. Valid values:
     *
     *   **text**
     *   **link**
     *
     * @example text
     *
     * @var string
     */
    public $type;

    /**
     * @description The content in the help information about the risk item when the Type parameter is set to text.
     *
     * @example Configure an IP address whitelist
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
     * @return assistInfo
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
