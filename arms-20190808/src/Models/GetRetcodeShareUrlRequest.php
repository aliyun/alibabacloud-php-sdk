<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetRetcodeShareUrlRequest extends Model
{
    /**
     * @description The project ID (PID) of the application.
     *
     * To obtain the application PID, log on to the Application Real-Time Monitoring Service (ARMS) console. In the left-side navigation pane, choose **Browser Monitoring**>**Browser Monitoring**. Then, click the name of the application. The URL in the address bar contains the application PID, in the xxx format. As the browser is encoded, you must modify the PID. For example, if the PID in the URL is xxx%4074xxx, you must replace %40 with an at sign (@) to obtain xxx@74xxx.
     *
     * This parameter is required.
     *
     * @example iioe7jcnuk@582846f37******
     *
     * @var string
     */
    public $pid;
    protected $_name = [
        'pid' => 'Pid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRetcodeShareUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
