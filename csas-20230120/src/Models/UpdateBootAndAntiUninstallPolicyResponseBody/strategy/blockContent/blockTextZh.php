<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyResponseBody\strategy\blockContent;

use AlibabaCloud\Tea\Model;

class blockTextZh extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $mainButtonText;

    /**
     * @var string
     */
    public $minorButtonText;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'Content',
        'mainButtonText' => 'MainButtonText',
        'minorButtonText' => 'MinorButtonText',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->mainButtonText) {
            $res['MainButtonText'] = $this->mainButtonText;
        }
        if (null !== $this->minorButtonText) {
            $res['MinorButtonText'] = $this->minorButtonText;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockTextZh
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['MainButtonText'])) {
            $model->mainButtonText = $map['MainButtonText'];
        }
        if (isset($map['MinorButtonText'])) {
            $model->minorButtonText = $map['MinorButtonText'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
