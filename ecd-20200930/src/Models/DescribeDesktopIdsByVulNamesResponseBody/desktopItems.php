<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopIdsByVulNamesResponseBody;

use AlibabaCloud\Tea\Model;

class desktopItems extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;
    protected $_name = [
        'desktopId'   => 'DesktopId',
        'desktopName' => 'DesktopName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        return $model;
    }
}
