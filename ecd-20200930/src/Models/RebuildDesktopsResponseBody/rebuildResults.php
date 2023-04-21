<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\RebuildDesktopsResponseBody;

use AlibabaCloud\Tea\Model;

class rebuildResults extends Model
{
    /**
     * @description The recreation result of the cloud desktop by changing the image. A value of success indicates that the image of the cloud desktop is changed. If the image of the cloud desktop failed to be changed, an error message is returned.
     *
     * @example IncorrectDesktopStatus
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The error message. This parameter is not returned if the value of Code is success.
     *
     * @example The current status of the desktop does not support this operation.
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'      => 'Code',
        'desktopId' => 'DesktopId',
        'message'   => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rebuildResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
