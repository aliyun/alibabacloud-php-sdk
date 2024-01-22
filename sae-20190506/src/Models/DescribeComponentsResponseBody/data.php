<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeComponentsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the component is expired. Valid values:
     *
     *   **true**: The component is expired.
     *   **false**: The component is not expired.
     *
     * @example Open JDK 8
     *
     * @var string
     */
    public $componentDescription;

    /**
     * @description The description of the component.
     *
     * @example Open JDK 8
     *
     * @var string
     */
    public $componentKey;

    /**
     * @description The error code.
     *
     *   The **ErrorCode** parameter is not returned when the request succeeds.
     *   The **ErrorCode** parameter is returned when the request fails. For more information, see **Error codes** in this topic.
     *
     * @example false
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The ID of the component.
     *
     * @example JDK
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'componentDescription' => 'ComponentDescription',
        'componentKey'         => 'ComponentKey',
        'expired'              => 'Expired',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentDescription) {
            $res['ComponentDescription'] = $this->componentDescription;
        }
        if (null !== $this->componentKey) {
            $res['ComponentKey'] = $this->componentKey;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ComponentDescription'])) {
            $model->componentDescription = $map['ComponentDescription'];
        }
        if (isset($map['ComponentKey'])) {
            $model->componentKey = $map['ComponentKey'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
