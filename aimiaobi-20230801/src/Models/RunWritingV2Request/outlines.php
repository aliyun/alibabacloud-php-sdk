<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\outlines\articles;
use AlibabaCloud\Tea\Model;

class outlines extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @var string
     */
    public $outline;
    protected $_name = [
        'articles' => 'Articles',
        'outline' => 'Outline',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->articles) {
            $res['Articles'] = [];
            if (null !== $this->articles && \is_array($this->articles)) {
                $n = 0;
                foreach ($this->articles as $item) {
                    $res['Articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outline) {
            $res['Outline'] = $this->outline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outlines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n = 0;
                foreach ($map['Articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Outline'])) {
            $model->outline = $map['Outline'];
        }

        return $model;
    }
}
