<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeTraceDiagnoseReportResponseBody;

use AlibabaCloud\Dara\Model;

class clientInfo extends Model
{
    /**
     * @var string
     */
    public $browserInfo;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $uaString;
    protected $_name = [
        'browserInfo' => 'BrowserInfo',
        'os' => 'Os',
        'uaString' => 'UaString',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserInfo) {
            $res['BrowserInfo'] = $this->browserInfo;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->uaString) {
            $res['UaString'] = $this->uaString;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrowserInfo'])) {
            $model->browserInfo = $map['BrowserInfo'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['UaString'])) {
            $model->uaString = $map['UaString'];
        }

        return $model;
    }
}
