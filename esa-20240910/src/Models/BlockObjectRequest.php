<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BlockObjectRequest extends Model
{
    /**
     * @description The content to block.
     *
     * This parameter is required.
     * @var string[]
     */
    public $content;

    /**
     * @description The blocking period that you can extend. Set the value to 2year.
     *
     * @example 2year
     *
     * @var string
     */
    public $extension;

    /**
     * @description The period of time during which the URL is blocked. Unit: seconds. Specify this parameter if Type is set to block.
     *
     * @example 864000
     *
     * @var int
     */
    public $maxage;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     * @example BlockObject
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The type. Valid values:
     *
     *   **block**
     *   **unblock**
     *
     * This parameter is required.
     * @example block
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content'   => 'Content',
        'extension' => 'Extension',
        'maxage'    => 'Maxage',
        'siteId'    => 'SiteId',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->maxage) {
            $res['Maxage'] = $this->maxage;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BlockObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = $map['Content'];
            }
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Maxage'])) {
            $model->maxage = $map['Maxage'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
