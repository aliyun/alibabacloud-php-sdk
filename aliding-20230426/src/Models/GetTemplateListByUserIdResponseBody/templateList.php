<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdResponseBody;

use AlibabaCloud\Tea\Model;

class templateList extends Model
{
    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 11111
     *
     * @var string
     */
    public $reportCode;

    /**
     * @example https://scsss/sss
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'iconUrl'    => 'IconUrl',
        'name'       => 'Name',
        'reportCode' => 'ReportCode',
        'url'        => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->reportCode) {
            $res['ReportCode'] = $this->reportCode;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReportCode'])) {
            $model->reportCode = $map['ReportCode'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
