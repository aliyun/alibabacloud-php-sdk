<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafSiteSettings;

use AlibabaCloud\Tea\Model;

class clientIpIdentifier extends Model
{
    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'headers' => 'Headers',
        'mode' => 'Mode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientIpIdentifier
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = $map['Headers'];
            }
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
